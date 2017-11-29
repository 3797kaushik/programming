/* package codechef; // don't place package name! */

import java.util.Scanner;

import java.util.*;
import java.io.*;
import java.math.*;


class sc{
    static BufferedReader reader;
    static StringTokenizer tokenizer;
static void init(InputStream input) {reader = new BufferedReader(new
InputStreamReader(input) );
        tokenizer = new StringTokenizer("");
    }
static String next() throws IOException {
        while (!tokenizer.hasMoreTokens() ) { tokenizer = new
StringTokenizer(reader.readLine() );}
        return tokenizer.nextToken();
    }
static String nextLine() throws IOException { return  next();}
static int nextInt() throws IOException {return Integer.parseInt( next() );}
static double nextDouble() throws IOException {return Double.parseDouble(
next() );}
static long nextLong() throws IOException {return Long.parseLong( next() );}
static BigInteger nextBigInteger() throws IOException {return new
BigInteger(next()) ;}
}
/* Name of the class has to be "Main" only if the class is public. */
class Codechef
{
	public static void main (String[] args) throws java.lang.Exception
	{
		// your code goes here
		 sc.init(System.in);
		int t=0; 
		
		 t=sc.nextInt();    
		
		int[] a=new int[t];
		int i,j,temp;

    for (i = 0; i < t; i++)
    {
		      
        a[i]=sc.nextInt();
        for (j = i; j >= 1; j--)
        {
            if (a[j] < a[j-1])
            {
                temp = a[j];
                a[j] = a[j-1];
                a[j-1] = temp;
            }
            else
                break;
        }
    }
		i=0;
	   	while (i<a.length)
	   	{
	   	    System.out.println(a[i]);
	   	    i++;
	   	}
	}
}
