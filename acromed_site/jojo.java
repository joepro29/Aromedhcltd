package vu.momo;
import java.util.Scanner;
public class Momo {

    public static void main(String[] args) {
        Scanner save = new Scanner(System.in);
        System.out.println("==================\nWELCOME TO MOBILEMONEY\n =====================");
        System.out.println("select your option \n 1. Send money. \n2. Withdraw Money. \n3. Check Balance. ");
        int Opt = save.nextInt();
        switch(Opt){
            case 1 -> System.out.println("Send Money Section");
            case 2 -> System.out.println("Airtime/Bundles");
            case 3 -> System.out.println("Pay Bill");
            case 4 -> System.out.println("Loans");
            case 5 -> System.out.println("Help Line");
            default -> System.out.println("Enter Wrong Option");
        }
    }
}
