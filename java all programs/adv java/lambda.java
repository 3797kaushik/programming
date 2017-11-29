import java.util.*;
interface Stringop{
	public void fun(String v);
}
class demo{
  public static void main(String ar[]){
      Scanner sc=new Scanner(System.in);
	 
	 String a=sc.nextLine();
	  
	  Stringop d=(b)->{
		  System.out.println(new StringBuilder(b).reverse());
	  };
	  
	  d.fun(a);
	  
	  Stringop d1=(b)->{
		  System.out.println(b.length());
	  };
	  d1.fun(a);
	  
	  
	  Stringop d2=(b)->{
		  System.out.println(b.replaceAll(" ",""));
	  };
	  d2.fun(a);
	  
	  
	  System.out.println();
	}	
	
}