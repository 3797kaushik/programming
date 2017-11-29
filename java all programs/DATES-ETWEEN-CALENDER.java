import java.util.*;
class demo 
{
	public static void main()
	{
		//SimpleDateFormat myFormat = new SimpleDateFormat("dd MM yyyy");
		String inputString1 = "23 01 1997";
		String inputString2 = "27 04 1997";

		try {
			Date date1 = myFormat.parse(inputString1);
			Date date2 = myFormat.parse(inputString2);
			long diff = date2.getTime() - date1.getTime();
			System.out.println ("Days: " + TimeUnit.DAYS.convert(diff, TimeUnit.MILLISECONDS));
		} catch (Exception e) {
			e.printStackTrace();
		}

	}
}