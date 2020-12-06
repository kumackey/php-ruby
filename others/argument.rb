def calc_goku_scouter original_power, kaio_ken: 1, is_suppressed: false, is_super_saiyan: false
  power = original_power * kaio_ken

  if power > 5000 && is_suppressed
    power = 5000
  end

  if is_super_saiyan
    power += 100000000
  end

  power
end

puts calc_goku_scouter 85000
# 85000

puts calc_goku_scouter 85000, kaio_ken: 2
# 170000

puts calc_goku_scouter 85000, is_suppressed: true
# 5000

puts calc_goku_scouter 85000, kaio_ken: 20, is_super_saiyan: true
# 101700000