import java.lang.*;
import java.util.*;
import java.math.*;
class node{
	int data;
	node left;
	node right;
	
}
  class Node {
     int data;
     Node next;
  }

public class first{

static Node MergeLists(Node headA, Node headB) {
     // This is a "method-only" submission. 
     // You only need to complete this method 
  Node current=new Node();
    Node headC=current;
    while(headA!=null && headB !=null){
        while(headA.data<headB.data){
            Node temp=new Node();
            temp.data=headA.data;
            temp.next=null;
            if(current == null){
                current=temp;continue;
            }
            current.next=temp; 
            headA=headA.next;
        }
        while(headA.data>headB.data){
            Node temp=new Node();
            temp.data=headB.data;
            temp.next=null;
            if(current == null){
                current=temp;continue;
            }
            current.next=temp;
            headB=headB.next;
        }
        if(headA==null || headB==null){
            break;
        }
        while(headA.data==headB.data){
            Node temp=new Node();
            temp.data=headB.data;
            temp.next=null;
            if(current == null){
                current=temp;continue;
            }
            current.next=temp;
            headA=headA.next;
            headB=headB.next;
        }
    }
    if(headA==null){
          while(headB!=null){
            Node temp=new Node();
            temp.data=headB.data;
            temp.next=null;
            if(current == null){
                current=temp;continue;
            }
            current.next=temp;
            headB=headB.next;
        }
    }
    else if(headB==null){
         while(headA!=null){
            Node temp=new Node();
            temp.data=headA.data;
            temp.next=null;
            if(current == null){
                current=temp;continue;
            }
            current.next=temp;
            headA=headA.next;
        }
    }
    return headC;
}	
  public static void main(String argc[]){
	
        Scanner in = new Scanner(System.in);
        int t = in.nextInt();
        for(int a0 = 0; a0 < t; a0++){
            String s = in.next();
            int len=s.length();
            Stack<Character> stack=new Stack<Character>();
            for(int i=0;i<len;i++){
                if(s.charAt(i)=='(' || s.charAt(i)=='{' || s.charAt(i)=='['){
                    char temp=s.charAt(i);
                    stack.add(temp);
                }
                else if(stack.size()>0){
                    char ch=stack.peek();
                    if(ch=='(' && s.charAt(i)==')'){
                        stack.pop();
                    }
                    else if(ch=='{' && s.charAt(i)=='}'){
                        stack.pop();
                    } 
                    else if(ch=='[' && s.charAt(i)==']'){
                        stack.pop();
                    }
                }  
                System.out.println(i+"----->"+stack.toString()+"----->"+stack.size()+"---->"+s.charAt(i));
            }
            if(stack.size()>0){
                System.out.println("NO"+stack.size());
            }
            else{
                System.out.println("YES");
            }
            
           
	}
  }
}