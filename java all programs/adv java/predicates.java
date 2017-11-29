import java.util.function.Predicate;
class predicates{
   public static void main(String ar[]){
    Predicate<String> i= (s)->s.length()>10;
	
	System.out.println(i.test("1234567890"));
   }
}