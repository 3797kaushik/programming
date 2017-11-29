 class Singleo
 {
	 static Singleo o;
	 public static Singleo  func()
	 {
		 if(o==null)
			 o=new Singleo();
		 return o;
	 }
	 
 }
 
 class Single
 {
	 public static void main(String s[])
	 {
		 Singleo o1= Singleo.func();
		 Singleo o2= Singleo.func();
		 Singleo o3= Singleo.func();
		 System.out.println(o1);
		 
		 if(o1.equals(o2));
		 System.out.println("true 1 is equal to 2");
		 
		  if(o2.equals(o3));
		 System.out.println("true 2 is equal to 3");
		 
	 }
	 
	 
 }
 