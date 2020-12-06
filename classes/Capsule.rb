class Capsule
  attr_reader :element
  attr_writer :element

  def initialize element
    @element = element
  end
end

capsule = Capsule.new '有効成分'
puts capsule.element
# 有効成分

p capsule
# #<Capsule:0x00007f8d909ac660 @element="有効成分">

capsule.element = '毒'
p capsule
# #<Capsule:0x00007f8d909ac660 @element="毒">