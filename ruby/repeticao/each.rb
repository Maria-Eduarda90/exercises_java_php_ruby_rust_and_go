nomes = ["Maria", "João", "Carla", "Cesar"]


nomes.each do |nome|
  puts nome
end

puts "_________________________"

dict = {nome: "Diego", idade: 35, altura: 1.73}
dict.each do |chave, valor|
  puts "#{chave}: #{valor}"
end