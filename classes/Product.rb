class Product
    def initialize price, cost
        @price = price
        @cost = cost
    end

    def print_judgment
        if calc_profit > 0
            puts 'この商品は利益が出ます！どんどん売りましょう！';
        else
            puts 'この商品は利益が出ません...売るべきではないかもしれません...'
        end
    end

    private

    def calc_profit
        @price - @cost
    end
end

product = Product.new 120, 100
product.print_judgment
# この商品は利益が出ます！どんどん売りましょう！

product =  Product.new 90, 100
product.print_judgment
# この商品は利益が出ません...売るべきではないかもしれません...

product.calc_profit
# Traceback (most recent call last):
# classes/Product.rb:30:in `<main>': private method `calc_profit' called for #<Product:0x00007fc9f19dc408 @price=120, @cost=100> (NoMethodError)