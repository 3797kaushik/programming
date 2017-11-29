class wildCard<T extends Number>{
  T ar[];
  double flag;
  wildCard(T[] b){
	  ar=b;
  }
  void average(){
	  double sum=0;
	  
	  for(int i=0;i<ar.length;i++){
		  sum +=ar[i].doubleValue();
	  }
	  flag=sum;
	  System.out.println(flag);
  }
  
  int compare(wildCard<?> n){
	  if(flag==n.flag){
		  System.out.println("yes");
	  }
	  else if(flag<n.flag){
		  System.out.println("less");	  
	  }
	  else{
		  System.out.println("more");	  
	  }
	  return 0;
  }
}

class demo{
	public static void main(String ar[]){
		Integer[] ar1={1,2,3,4,5};
		wildCard<Integer> al=new wildCard<Integer>(ar1);
		al.average();
		
		Double[] ar2={1.1,2.2,3.3,4.4,5.5};
		wildCard<Double> al1=new wildCard<Double>(ar2);
		al1.average();
		al1.compare(al);
	}
	
}