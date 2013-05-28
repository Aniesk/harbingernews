Harbingernews::Application.routes.draw do

  mount RailsAdmin::Engine => '/admin', :as => 'rails_admin'

  mount Rich::Engine => '/rich', :as => 'rich'

  root :to => "home#index"

  devise_for :users, :skip => [:sessions] 

  devise_scope :user do
    get "login" => "devise/sessions#new"
    get "signin" => "devise/sessions#new"
    post 'login' => 'devise/sessions#create', :as => :user_session
    get "signup" => "devise/registrations#new", :as => :new_user_registration
    get 'signout' => 'devise/sessions#destroy', :as => :destroy_user_session
  end

  

  resources :upcoming_events

  resources :recent_events

  

  # set root path
  

  # Announcements
  resources :announcements
  
  # Memos
  resources :memos

  # Mostly static pages
  get '/about', to: 'static_pages#about'
  get '/get_involved', to: "static_pages#get_involved"
  get '/harbingerteam', to: "static_pages#harbingerteam"
  get '/error404', to: "static_pages#404"
  get '/error500', to: "static_pages#500"
  get '/error422', to: "static_pages#422"


  # Sports Pages
  get '/sports/:slug',           to: "sports#show" # Show the sports pages by name (slug) not id
  get '/sports/:slug/edit',      to: "sports#edit" # Allows the edit pages to work with the same
  put '/sports/:slug',           to: 'sports#update'
  resources :sports, only: [:index, :new, :create, :destroy]
  
  # Clubs Pages
  get '/clubs/:slug',            to: 'clubs#show'
  get '/clubs/:slug/edit',       to: 'clubs#edit'
  put '/clubs/:slug',            to: 'clubs#update'
  resources :clubs,  only: [:index, :new, :create, :destroy]
  
  # Bus Server Service
  match '/buses/map', to: "buses#map"
  resources :buses

  # Custom Error Pages
  unless Rails.application.config.consider_all_requests_local
    match '*not_found', to: 'errors#error_404'
  end
  
  post    '/favorites' => 'favorites#create'
  delete  '/favorites' => 'favorites#destroy'
  get     '/favorites' => 'favorites#list'
  
end
#== Route Map
# Generated on 27 Mar 2013 23:38
#
#        about        /about(.:format)             static_pages#about
# get_involved        /get_involved(.:format)      static_pages#get_involved
#    users_new GET    /users/new(.:format)         users#new
#                     /sports/:slug(.:format)      sports#show
#                     /sports/:slug/edit(.:format) sports#edit
#       sports GET    /sports(.:format)            sports#index
#              POST   /sports(.:format)            sports#create
#    new_sport GET    /sports/new(.:format)        sports#new
#   edit_sport GET    /sports/:id/edit(.:format)   sports#edit
#        sport GET    /sports/:id(.:format)        sports#show
#              PUT    /sports/:id(.:format)        sports#update
#              DELETE /sports/:id(.:format)        sports#destroy
