package main

import "fmt"

func main(){
	arr := [...]int{1, 2, 3, 4}

	user := map[string]string{
		"nome": "maria",
		"nick": "meyh",
	}

	for _, value := range arr {
		fmt.Println(value * value)
	}

	for key, value := range user {
		fmt.Printf("O campo \"%s\" tem o valor igual a \"%s\"\n", key, value)
	}

}