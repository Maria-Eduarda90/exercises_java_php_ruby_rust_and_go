package main

import (
	"fmt"
	"time"
)

func main(){
	done := make(chan bool)

	go task(done)

	<-done
}

func task(done chan bool){
	fmt.Println("START TASK")
	time.Sleep(time.Second * 3)
	fmt.Println("END TASK")
	done <- true
}