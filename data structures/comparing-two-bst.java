Scanner sc=new Scanner(System.in);
		 int t=sc.nextInt();
		 while(t>0){
		int n=sc.nextInt();
		int temp=0,prev=sc.nextInt();
		for(int i=0;i<n-1;i++)
		{
		    int curr=sc.nextInt();
		    if(prev>curr){
		        temp=1;
		    }
		}
		if(temp==0){
		    System.out.print(0);
		}
		    System.out.print(1);
		    t--;
		 }
	