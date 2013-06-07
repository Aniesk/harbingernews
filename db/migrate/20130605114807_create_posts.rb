class CreatePosts < ActiveRecord::Migration
  def change
    create_table :posts do |t|
      t.string :title
      t.text :body

      ## Slug for the posts should be the same as what it is being posted to. if it is to aha, the slug should be aha
      t.string :slug
      t.string :sp_or_cl ## Sport or club. Will be determined by where the post is created.

      ## Author of the post. will be determined at creation of the club
      t.string :author
      t.timestamps
    end
  end
end
