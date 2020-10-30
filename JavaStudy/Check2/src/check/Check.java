package check;
import static constants.Constants.*;

public class Check {

    private static String firstName = "新一";
    private static String lastName = "足木";

    public static void main(String[] args) {
        System.out.println("printNameメソッド → " + printName(lastName,firstName));

        Pet pet = new Pet(CHECK_CLASS_JAVA, CHECK_CLASS_HOGE);
        RobotPet robotPet = new RobotPet(CHECK_CLASS_R2D2, CHECK_CLASS_LUKE);

        pet.introduce();
        robotPet.introduce();
    }
    private static String printName(String firstName, String lastName) {
        return (firstName + lastName);
    }

}
