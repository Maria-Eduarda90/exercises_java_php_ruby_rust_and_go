nomes = ["Maria", "João", "Carla", "Cesar"]

nomes_completos = nomes.map do |nome_completos|
    nome_completos + " sobrenomes"
end

puts nomes_completos
puts ""

puts "_______ sobre escrever a lista ________"

nomes.map! do |nome_completos|
    nome_completos + " sobrenomes"
end

puts nomes