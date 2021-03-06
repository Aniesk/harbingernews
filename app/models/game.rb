class Game < ActiveRecord::Base
  attr_accessible :date, :is_home, :opponent, :score, :status, :time, :sport_id
  
  belongs_to :sport, :inverse_of => :games
end
