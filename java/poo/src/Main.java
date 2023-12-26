import javax.swing.*;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner kb = new Scanner(System.in);

        Produtos produto = new Produtos();

        System.out.println("Nome do produto: ");
        produto.produto = kb.next();

        System.out.println("Insira a quantidade: ");
        produto.quantidade = kb.nextDouble();

        System.out.println("Insira o preço individual: ");
        produto.preco = kb.nextDouble();

        System.out.println("Confirmação: "+produto.produto+", Estoque: "+produto.quantidade+", Preço: "+produto.preco);

        System.out.println("Deseja acrescentar produtos ao estoque? ");
        int estoque = kb.nextInt();
        produto.addProdutos(estoque);
        System.out.println("Atualização: "+produto.produto+", Estoque Atual: "+produto.quantidade+", Preço: "+produto.preco);

        System.out.println("Deseja remover produtos do estoque? ");
        estoque = kb.nextInt();
        produto.subProdutos(estoque);
        System.out.println("Atualização após vendas: "+produto.produto+", Estoque Atual: "+produto.quantidade+", Preço: "+produto.preco+" Valor atual do estoque: R$ "+produto.quantidade*produto.preco);

        JOptionPane.showMessageDialog(null, "Atualização após vendas: "+produto.produto+", Estoque Atual: "+produto.quantidade+", Preço: "+produto.preco+" Valor atual do estoque: R$ "+produto.quantidade*produto.preco);

        kb.close();
    }
}