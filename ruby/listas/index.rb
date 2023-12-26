listas = []

listas.push("Diego", "kenny")
listas << "Maria"

listas.insert(0, "Debora")
puts listas

puts "**********************"

listas.delete("Diego")
puts listas

puts "**********************"
puts listas.length
lista_organizadas = listas.sort
puts lista_organizadas

puts "primeiro: "
puts lista_organizadas.first

puts "ultimo: "
puts lista_organizadas.last