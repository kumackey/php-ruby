class User
  class << self
    def find_by_id id
      # IDが1のときはユーザオブジェクトを返し、それ以外のときはユーザオブジェクトを返さないとします
      if id == 1
        User.new '最初のユーザ'
      else
        nil
      end
    end
  end

  def initialize name
    @name = name
  end
end

def print_user user
  # ユーザオブジェクトが存在するかを確認する
  if !user
    puts 'ユーザはいません'
  else
    p user
  end
end

user2 = User::find_by_id 2
print_user user2
# ユーザはいません

p user2
# nil

user1 = User::find_by_id 1
print_user user1
# #<User:0x00007fe70f173f88 @name="最初のユーザ">