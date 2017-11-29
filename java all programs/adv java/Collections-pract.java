import java.util.*;
class demo {
	public static void main(String ar[]){
		ArrayList<Integer> al=new ArrayList<Integer>();
		al.add(11);
		al.add(12);
		al.add(13);
		al.add(14);
		al.add(15);
		al.add(16);
		ArrayList<Integer> bl=new ArrayList<Integer>();
		bl.add(11);
		bl.add(12);
		bl.add(13);
		bl.add(14);
		bl.add(15);
		bl.add(16);
		/*
		ListIterator<Integer> itr=al.listIterator();
		while(itr.hasNext()){			
			System.out.println("@"+itr.next());  
		}
		
		// ListIterator<Integer> itr=al.listIterator();
		while(itr.hasPrevious()){			
			System.out.println("#"+itr.previous());  
		}
		**/
		System.out.println(al);
		al.addAll(2,al);
		System.out.println(al);
		al.set(3,10000);
		System.out.println(al);
		
		Iterator<Integer> itr =al.iterator();
		
		System.out.println(itr);
		while(itr.hasNext()){
			System.out.println("|"+itr.next());
			itr.remove();
		}
		System.out.println(al);
	}
}