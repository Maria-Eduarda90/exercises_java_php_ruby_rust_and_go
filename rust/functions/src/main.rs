fn main() {

    let y = plus_one(5);
    println!("The value of y is: {y}");

    another_function(5);
    let x = five();
    println!("The value of x is: {x}");
}

fn another_function(x: i32){
    println!("The value of x is: {x}");
}

fn five() -> i32 {
    5
}

fn plus_one(y: i32) -> i32{
    y + 1
}