package main

import "fmt"

func main(){
	tabuada := [10]int{0, 5, 10}
	user := map[string]string{
		"name": "maria",
		"nick": "meyh",
	}

	slice := []int{1, 3, 6}

	slice = append(slice, 3, 4, 8)

	fmt.Println(tabuada)
	fmt.Println(user)
	fmt.Println(slice)
}