class Person
  attr_accessor :name

  def initialize name, age
    @name = name
    @age = age
  end
end

person = Person.new '一郎', 10
p person
# #<Person:0x00007ff39f158750 @name="一郎", @age=10>

puts person.name
# 一郎

puts person.age
# Traceback (most recent call last):
# classes/Person.rb:16:in `<main>': undefined method `age' for #<Person:0x00007ff39f158750 @name="一郎", @age=10> (NoMethodError)