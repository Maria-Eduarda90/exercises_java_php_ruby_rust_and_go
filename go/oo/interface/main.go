package main

import "fmt"

func main(){
	u := User {
		"Maria",
		"Meyh",
		false,
	}

	adm := Admin {
		User {
			"Nayane",
			"Nay",
			false,
		},
		19,
	}

	showUserInfo(u)
	showUserInfo(adm)
}

func showUserInfo(u UsersInterface){
	fmt.Println(u.Show())
}

type UsersInterface interface {
	Show() string
}

type User struct {
	name string
	username string
	online bool
}

func (u User) Show() string {
	return fmt.Sprintf("Hello, my name is %s and my username is %s.", u.name, u.username)
}

type Admin struct {
	User
	age int
}