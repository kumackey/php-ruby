class Sample
  TEST_CODE = 'test_code'

  def print_code
    puts "コードは#{TEST_CODE}です。";
  end
end

puts Sample::TEST_CODE
# test_code

sample = Sample.new
sample.print_code
# コードはtest_codeです。