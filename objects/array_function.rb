sequence_numbers = [1, 2, 3, 4, 5]
sequence_numbers << 6
p sequence_numbers
# [1, 2, 3, 4, 5, 6]

fruits = {red: 'apple', purple: 'grape', yellow: 'lemon'}
fruits[:orange] = 'pumpkin'
p fruits
# {:red=>"apple", :purple=>"grape", :yellow=>"lemon", :orange=>"pumpkin"}

sequence_numbers.each do |number|
  multiple_of_3 = number * 3
  puts multiple_of_3
end
# 3
# 6
# 9
# 12
# 15
# 18

multiples = sequence_numbers.map do |number|
  number * 3
end
p multiples
# [3, 6, 9, 12, 15, 18]
