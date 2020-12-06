def print_ymd is_beginning_of_month
  today = Time.now

  datetime = if is_beginning_of_month
               Time.new today.year, today.month, 1 # is_beginning_of_month = falseでは現在日を返す
             else
               today # 月初を返す
             end

  puts datetime.strftime "%Y年%m月%d日です"
end

print_ymd false
# 2020年12月07日です

print_ymd true
# 2020年12月01日です