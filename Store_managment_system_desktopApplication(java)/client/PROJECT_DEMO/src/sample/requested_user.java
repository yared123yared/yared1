package sample;

import javafx.beans.property.IntegerProperty;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.property.StringProperty;

import java.sql.Date;

public class requested_user {

    private final IntegerProperty item_id;
    private final StringProperty user_name;



    private final IntegerProperty Requeste_id;

    private final Date requested_date;
    private final StringProperty Aprroved;


    public requested_user(Integer requeste_id, String user_name, Integer item_id, Date requested_date, String aprroved) {

        this.user_name = new SimpleStringProperty(user_name);

        this.item_id = new SimpleIntegerProperty(item_id);

        this.Requeste_id = new SimpleIntegerProperty(requeste_id);
        this.requested_date = requested_date;
        this.Aprroved =  new SimpleStringProperty(aprroved);


    }

    public String getUser_name() {
        return user_name.get();
    }

    public StringProperty user_nameProperty() {
        return user_name;
    }


    public int getItem_id() {
        return item_id.get();
    }

    public IntegerProperty item_idProperty() {
        return item_id;
    }

    public int getRequeste_id() {
        return Requeste_id.get();
    }

    public IntegerProperty requeste_idProperty() {
        return Requeste_id;
    }

    public Date getRequested_date() {
        return requested_date;
    }

    public String getAprroved() {
        return Aprroved.get();
    }

    public StringProperty aprrovedProperty() {
        return Aprroved;
    }


}