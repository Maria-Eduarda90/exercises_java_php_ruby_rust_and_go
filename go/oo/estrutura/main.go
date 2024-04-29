package main

import "fmt"

func main(){
	u := user{
		"Maria",
		19,
		true,
	}

	fmt.Println(u)
}

type user struct {
	Name string
	Age int
	Live bool
}