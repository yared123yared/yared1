package sample;

import javafx.beans.property.IntegerProperty;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.property.StringProperty;

import javax.print.DocFlavor;
import java.sql.Date;

public class taken_item_user {


    private final StringProperty item_id;
    private final StringProperty item_name;
    private final StringProperty user_name;
    private final StringProperty category;

    private final StringProperty brand;
    private final Date date;

    public taken_item_user(String item_name, String user_name, Date date, String item_id, String category, String brand) {

        this.item_id = new SimpleStringProperty(item_id);
        this.user_name = new SimpleStringProperty(user_name);
        this.item_name = new SimpleStringProperty(item_name);
        this.brand = new SimpleStringProperty(brand);
        this.category = new SimpleStringProperty(category);
        this.date = date;


        //this.description = description;
    }

    public String getItem_id() {
        return item_id.get();
    }

    public StringProperty item_idProperty() {
        return item_id;
    }

    public String getItem_name() {
        return item_name.get();
    }

    public StringProperty item_nameProperty() {
        return item_name;
    }

    public String getUser_name() {
        return user_name.get();
    }

    public StringProperty user_nameProperty() {
        return user_name;
    }

    public String getCategory() {
        return category.get();
    }

    public StringProperty categoryProperty() {
        return category;
    }

    public String getBrand() {
        return brand.get();
    }

    public StringProperty brandProperty() {
        return brand;
    }

    public Date getDate() {
        return date;
    }
}



