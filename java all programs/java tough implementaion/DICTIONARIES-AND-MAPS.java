
import java.util.*;
import java.io.*;

class Solution{
    public static void main(String []argh) throws Exception{
        Scanner in = new Scanner(System.in);
        int n=0;
		if(in.hasNextInt())
		{
			n = in.nextInt();
		}
		
        HashMap<String,String> h= new HashMap<String,String>();
        String name="";
        for(int i = 0; i < n; i++){
            
            if(in.hasNext())
                {
            name = in.next();    
            }
            
            int phone =0;
            if(in.hasNextInt())
                {
            phone=in.nextInt();    
            }
            
            // Write code here
            
            h.put(name,Integer.toString(phone));
        }
        int count=0;
        
         HashMap<String,String> disp= new HashMap<String,String>();
        ArrayList<String> al= new ArrayList<String>();
        int i=0;
        while(in.hasNext()){
            String a=in.next();
            al.add(a);
            i++;
        }
        
        for( i=0;i<al.size();i++)
            {
            //String name="";
           if(h.containsKey(al.get(i)))
              {
                  //name=;
                  System.out.println(al.get(i)+"="+h.get(al.get(i)));
              }
              else
              {
                  System.out.println("Not found");
              }
        }
        in.close();
    }
}
        /*
		3
sam 99912222
tom 11122222
harry 12299933
sam
edward
harry
		
		*/