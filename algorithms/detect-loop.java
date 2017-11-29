
int detectloop(Node *list)
{
   // your code here
   Node *curr1=list,*curr2=list;
   while(curr1!=NULL && curr2!=NULL && curr2->next!=NULL){
     
       curr1=curr1->next;
       curr2=curr2->next->next;
       if(curr1==curr2){
           return 1;
       }
   }
   return 0;
}