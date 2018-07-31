package Streams;
import java.io.*;
public class KeyInput {
public static void main(String ar[]) throws IOException {
	//DataInputStream dis=new DataInputStream(System.in);
	//InputStreamReader isr=new InputStreamReader(System.in);
	//BufferedReader br=new BufferedReader(isr);
	Console c=System.console();
	System.out.println("enter some string");
	//String str=dis.readLine();
	String str=c.readLine();
	System.out.println("str "+str);
	System.out.println("enter some number");
	//int age=Integer.parseInt(br.readLine());
	char ch[]=c.readPassword();
	String pass=String.valueOf(ch);
	System.out.println("password"+pass);
}
}
