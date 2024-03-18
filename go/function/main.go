package main

import "fmt"

func main(){
	soma(10, 20);
}

func soma(n1 int, n2 int){
	result := n1 + n2;
	fmt.Println("soma de n1 + n2: ", result);
}