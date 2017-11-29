import java.io.*;
import java.util.*;

 class Solution {

    public static void main(String[] args) {
        /* Enter your code here. Read input from STDIN. Print output to STDOUT. Your class should be named Solution. */
        
        Scanner sc=new Scanner(System.in);
        int t=sc.nextInt();
        while(t>0)
            {
        int n=sc.nextInt();
        int a=sc.nextInt(),b=sc.nextInt();
        ArrayList[] l=new ArrayList[n];
        l[0]=new ArrayList<Integer>();
        l[0].add(0);
        for(int i=1;i<n;i++)
        {
            l[i]=new ArrayList<Integer>();
                int j=0,len=l[i-1].size();
            
            ArrayList<Integer> temp =l[i-1];
            while(j<len)
                {            
                
                int temp1=temp.get(j);
                if(!l[i].contains(temp1+a))
                    {                 
                l[i].add(temp1+a);                   
                }
                if(!l[i].contains(temp1+b))
                    {
                l[i].add(temp1+b);}
                j++;
            }
        }
        Collections.sort(l[n-1]);
            Integer prev=-1;
            int size1=l[n-1].size();
           for(int i=0;i<size1;i++)
               {
               prev = (int)l[n-1].get(i);
               System.out.print(l[n-1].get(i)+" ");
           }
            System.out.println();
            t--;
        }
    }
}