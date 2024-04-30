package main

import "fmt"

func main(){
	var adm Admin

	adm.ranking = 1
	adm.name = "Maria"
	adm.online = true

	fmt.Println(adm)
}

type User struct {
	name string
	online bool
}

type Admin struct {
	User
	ranking int
}