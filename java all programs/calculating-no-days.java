import java.io.*;
import java.util.*;
import java.text.*;
import java.math.*;
import java.util.regex.*;

public class Solution {

    public static void main(String[] args) {
        /* Enter your code here. Read input from STDIN. Print output to STDOUT. Your class should be named Solution. */
        Scanner sc=new Scanner(System.in);
        int day1=sc.nextInt();
        int mon1=sc.nextInt();
        int year1=sc.nextInt();
         int day2=sc.nextInt();
        int mon2=sc.nextInt();
        int year2=sc.nextInt();
        Calendar c1=Calendar.getInstance();
        c1.set(year1,mon1, day1);
        Calendar c2=Calendar.getInstance();
        c2.set(year2,mon2,day2);
 
        Date d1=c1.getTime();
        Date d2=c2.getTime();
 
        long diff=d1.getTime()-d2.getTime();
        int noofdays=(int)Math.ceil((diff/(1000*24*60*60)));
        System.out.println(noofdays*15);
    }
}