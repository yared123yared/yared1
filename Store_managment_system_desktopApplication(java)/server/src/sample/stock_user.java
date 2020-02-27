package sample;

import javafx.beans.property.IntegerProperty;
import javafx.beans.property.SimpleIntegerProperty;
import javafx.beans.property.SimpleStringProperty;
import javafx.beans.property.StringProperty;

import java.sql.Date;

public class stock_user {






        private final StringProperty Name;
        private final IntegerProperty quantity;
        private final StringProperty supplier;

        private final StringProperty brand;
        private final Date date;
        private final StringProperty category;

        private final StringProperty added_by;
        public stock_user(String name, String supplier, String brand, String category, int quantity, Date date, String added_by) {

            this.Name = new SimpleStringProperty(name);
            this.quantity =  new SimpleIntegerProperty(quantity);
            this.supplier =  new SimpleStringProperty(supplier);
            this.brand =  new SimpleStringProperty(brand);
            this.category=new SimpleStringProperty(category);
            this.date = date;
            this.added_by =new SimpleStringProperty(added_by);

            //this.description = description;
        }




    public String getName() {
            return Name.get();
        }



        public int getquantity() {
            return quantity.get();
        }



        public String getsupplier() {
            return supplier.get();
        }



        public String gebrand() {
            return brand.get();
        }







        public String getcategory() {
            return category.get();
        }


    }


