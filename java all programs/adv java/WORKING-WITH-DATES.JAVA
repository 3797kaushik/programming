import java.text.DateFormat;
import java.util.Date;
import java.util.GregorianCalendar;


public class Main {

	public static void main(String[] args) {
		//  Date is acomplex object like string
		Date d1 = new Date();
		// Date d2 = new Date(long x);
		// represents the milliseconds since january 1 ,1990 midnight gmt
		//  known as epoch date
		Date d3 = new Date();
		System.out.println(d1);
		//  here in the above date is printed out by the tostring 
		// method which is written in the util.Date
		
		GregorianCalendar gc =new GregorianCalendar(1997, 7, 3);
		// it can know the leap year also and rejects if doesn'tb exist
		
		gc.add(GregorianCalendar.DATE, 1);
		// the above method is used for adding the no of days 
		// to the date at the calender
		
		// gregorian calender doesn't have formatting tag
		System.out.println(gc);;
		
		Date d2=gc.getTime();
		
		DateFormat df = DateFormat.getDateInstance();
		// the above line is used for formatting the date
		
		String s=df.format(d2);
		System.out.println(s);
		DateFormat df1 = DateFormat.getDateInstance(DateFormat.FULL);
		// the above line is used for formatting the date
		
		s=df1.format(d2);
		System.out.println(s);
	}

}