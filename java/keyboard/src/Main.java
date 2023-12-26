import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner kb = new Scanner(System.in);

        System.out.println("Qual produto deseja cadastrar? ");
        String product = kb.next();

        System.out.println("Qual a quantidade do produto? ");
        int quantity = kb.nextInt();

        System.out.println("Insira o preço do produto: ? ");
        double price = kb.nextDouble();

        System.out.println("Produto cadastrado com sucesso!");

        kb.close();
    }
}