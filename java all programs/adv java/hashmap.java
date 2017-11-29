import java.util.*;
class demo{
	public static void main(String awr[]){
		HashMap<Integer,Integer> h=new HashMap<Integer,Integer>();
		//int n=sc.nextInt();
		int ar[]={1,2,3,4,5,5,2,3,1,6,7};
		int n=ar.length;
		
		for(int i=0;i<n;i++){
			if(h.containsKey(ar[i])){
				int temp=h.get(ar[i]);
				temp++;
				h.put(ar[i],temp);
			}
			else
				h.put(ar[i],1);
		}
		
		System.out.println(h);
	}
}