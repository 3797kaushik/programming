
public class Main {

	static private String[] months =
		{"January", "February", "March",
		"April", "May", "June",
		"July", "August", "September",
		"October", "November", "December"};

	public static void main(String[] args) {
		for (int i = 0; i < months.length; i++) {
			System.out.println(months[i]);
		}
		
		for (String i : months) {
			System.out.println(i);
		}
	
		int counter=0;
		while(counter<months.length){
			System.out.println(months[counter]);
			counter++;
		
		 counter=0;
		do{
			System.out.println(months[counter]);
			counter++;
		}while(counter<months.length);
			
		}
	}
}
