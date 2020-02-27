/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package client;

//import java.io.FileInputStream;
import java.io.*;
//import java.io.PrintStream;
import java.net.Socket;
import jdk.net.Sockets;

public class Client {

    public static void main(String[] args) throws IOException {
//        try
//        {
            Socket s= new Socket("10.6.155.92",1000);
            PrintStream ps= new PrintStream(s.getOutputStream());
            ps.println("hellow this is my first message");
            InputStreamReader is= new InputStreamReader(s.getInputStream());
            BufferedReader ir= new BufferedReader(is);
            String message = ir.readLine();
            System.out.println(message);
            s.close();
//        }
//        catch(Exception e)
//        {
//            System.out.println("nooo");
//        }
    }
    
}
