class VertebrateAnimal
  class << self
    def is_vertebrate_animal group
      get_vertebrate_animal.include?(group)
    end

    private

    def get_vertebrate_animal
      %w[fishes amphibians reptiles birds mammals]
    end
  end
end

is_vertebrate_animal1 = VertebrateAnimal::is_vertebrate_animal 'fishes'
puts is_vertebrate_animal1
# true

is_vertebrate_animal2 = VertebrateAnimal::is_vertebrate_animal 'insects'
puts is_vertebrate_animal2
# false
