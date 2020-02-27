package sample;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.ComboBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;

import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.Socket;
import java.net.URL;
import java.net.UnknownHostException;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.ResourceBundle;

public class updateItemController implements Initializable,collection_2
{
    @FXML
    private TextField up_itemName;
    @FXML
    private ObservableList<String> liste= FXCollections.observableArrayList();
    @FXML
    private ComboBox up_itemCategory;

    @FXML
    private TextArea up_itemDescribtion;

    @FXML
    private DatePicker up_Item_date;
    @FXML
    private ComboBox up_item_brand;
    @FXML
    private ObservableList<String> list= FXCollections.observableArrayList();
    Add_produt a = new Add_produt();
    @Override
    public void initialize(URL location, ResourceBundle resources) {
        this.upRun();
    }
    public void upRun(){
        up_itemName.setText(updateStocks.get(0).getName());
        up_itemCategory.setPromptText(updateStocks.get(0).getcategory());
        up_Item_date.setPromptText(updateStocks.get(0).getDate()+"");
        up_item_brand.setPromptText(updateStocks.get(0).gebrand());
        up_itemDescribtion.setText(updateStocks.get(0).getDescription());
        try {
            this.addCategoryy(category_collection);
        } catch (SQLException e) {
            e.printStackTrace();
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        }
    }
    public void temporary() throws IOException, ClassNotFoundException, SQLException {
        System.out.println(up_itemCategory.getSelectionModel().getSelectedItem());

        ArrayList<String> message = new ArrayList<>();
        Socket sock = null;
        sock = new Socket(SocketConnection.ip, SocketConnection.port);
        //

        //
        ObjectOutputStream data = null;
        data = new ObjectOutputStream(sock.getOutputStream());
        ArrayList<String> list = new ArrayList<>();
        list.add("temp");
        System.out.println(up_itemCategory.getSelectionModel().getSelectedItem());
        list.add((String) up_itemCategory.getSelectionModel().getSelectedItem());
        data.writeObject(list);
        //data.flush();
        //data.close();
        //
        ObjectInputStream input = new ObjectInputStream(sock.getInputStream());
        System.out.println("thise is the object input method");
        System.out.println(sock.getInputStream());
        Object object = input.readObject();
        System.out.println("the obeject have been read");
        System.out.println(object);
        message = (ArrayList<String>) object;
        for (int i = 0; i < message.size(); i++) {
            System.out.println(message.get(i));
        }
        //addbrand  ad=new addbrand();
        System.out.println("thise is the retrived value");
        //a.getInttomessage(message);
        //a.addCategoryy();
        addbrand(message);
    }
    public void addbrand(ArrayList message) throws SQLException, ClassNotFoundException {
        // ObservableList liste=new ArrayList<>();
        liste.clear();
        for(int i=0;i<message.size();i++){
            liste.add((String) message.get(i));

        }

        System.out.println("thise is the add brand class");



        up_item_brand.setItems(liste);


    }
    public  void update_item() {

        String addedby = u_name.get(0);
        String owener = item_id_collection.get(1);
        String ite_id = item_id_collection.get(0);
        System.out.print(ite_id);
        System.out.println(up_itemName.getText());
        System.out.println(up_itemCategory.getSelectionModel().getSelectedItem());
        System.out.println(up_item_brand.getSelectionModel().getSelectedItem());
        System.out.println(up_itemCategory.getPromptText());
        System.out.println(up_item_brand.getPromptText());
        System.out.println(up_Item_date.getValue());
        System.out.println(up_itemDescribtion.getText());
        try {
            Socket sock = null;
            sock = new Socket(SocketConnection.ip, SocketConnection.port);

            ObjectOutputStream data = null;
            data = new ObjectOutputStream(sock.getOutputStream());
            ArrayList<String> list = new ArrayList<>();
            list.add("u_s");
            list.add(ite_id);
            list.add(up_itemName.getText());
            list.add((String) up_itemCategory.getPromptText());
            list.add((String) up_item_brand.getPromptText());
            list.add(String.valueOf(up_Item_date.getValue()));
            list.add(addedby);
            list.add(owener);
            list.add(up_itemDescribtion.getText());
            //System.out.println(item_name.getText());


            data.writeObject(list);
            data.flush();
            data.close();

        } catch (UnknownHostException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
        public void addCategoryy(ArrayList message) throws SQLException, ClassNotFoundException {
        for(int i=0;i<message.size();i++){

            list.add((String) message.get(i));
        }

        up_itemCategory.setItems(list);



    }


}
