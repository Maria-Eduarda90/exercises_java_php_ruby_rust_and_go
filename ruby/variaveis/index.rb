puts "qual é o seu nome? "
name = gets.chomp
puts "qual a sua idade?"
age = gets.chomp.to_i

puts "hello #{name}"
puts "#{name} tem #{age} anos"