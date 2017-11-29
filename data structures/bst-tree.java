import java.lang.*;
import java.util.*;
import java.math.*;
class node{
	int data;
	node left;
	node right;
}

public class first{
	node n;
	first(){
		n=null;
	}
	void insert(int a){
		node newnode=new node();
		newnode.data=a;
		newnode.left=null;
		newnode.right=null;
		
		node current=n,par=n;
		if(current==null){
			n=newnode;
			return;
		}
		while(current!=null){
			par=current;
			if(current.data>a){
				current=current.left;
			}
			else{
				current=current.right;
			}
		}
			
			if(par.data>a){
				par.left=newnode;;
			}
			else{
				par.right=newnode;
			}
	}
	
  void inOrder(node temp){
	  if(temp==null){
		  return;
	  }
	  inOrder(temp.left);
	  System.out.print(temp.data+"->");
	  inOrder(temp.right);
  }
  void preOrder(node temp){
	  if(temp==null){
		  return;
	  }
	  inOrder(temp.left);
	  inOrder(temp.right);
	  System.out.print(temp.data+"->");
  }
  public static void main(String argc[]){
	
	System.out.println("Enter how many numbers you want to enter:");
	Scanner sc=new Scanner(System.in);
	int a_x=sc.nextInt();
	first f=new first();
	for(int j=0;j<a_x;j++){
		int temp=sc.nextInt();
		f.insert(temp);
	}	
	f.inOrder(f.n);
	System.out.println("\n");
	f.preOrder(f.n);
	
	
  }
}