require 'spec_helper'

describe "announcements/index" do
  before(:each) do
    assign(:announcements, [
      stub_model(Announcement,
        :a_or_b => "A Or B",
        :content => "MyText"
      ),
      stub_model(Announcement,
        :a_or_b => "A Or B",
        :content => "MyText"
      )
    ])
  end

  it "renders a list of announcements" do
    render
    # Run the generator again with the --webrat flag if you want to use webrat matchers
    assert_select "tr>td", :text => "A Or B".to_s, :count => 2
    assert_select "tr>td", :text => "MyText".to_s, :count => 2
  end
end