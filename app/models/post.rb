class Post < ActiveRecord::Base
  attr_accessible :title, :body, :slug, :sp_or_cl, :author
  has_one :user
  has_paper_trail


end
