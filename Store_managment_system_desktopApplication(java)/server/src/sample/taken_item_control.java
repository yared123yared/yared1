package sample;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import sample.connectivity.connectionclass;

import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ResourceBundle;

public class taken_item_control {
    @FXML
    private TableView<taken_item_user> table;
    @FXML
    private TableColumn<taken_item_user,String> item_name;
    @FXML
    private TableColumn<taken_item_user,String> item_CATEGORY;
    @FXML
    private TableColumn<taken_item_user,String> item_bbrand;
    @FXML
    private TableColumn<taken_item_user,String>taken_by;
    @FXML
    private TableColumn<taken_item_user,String>item_id;
    @FXML
    private TableColumn<taken_item_user,String>date;
    @FXML
    private ObservableList<taken_item_user> data=FXCollections.observableArrayList();
    @FXML
    private sample.connectivity.connectionclass connectionclass;



    public void initialize(URL location, ResourceBundle resources) {

        connectionclass =new connectionclass();

    }
    public void changescene_store_keeper_home(ActionEvent event) throws IOException {
        System.out.println("you have clicked me");
        Parent inner = FXMLLoader.load(getClass().getResource("Store_keeper home.fxml"));
        Scene innerscene = new Scene(inner);

        Stage innerStage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        innerscene.getStylesheets().add(getClass().getResource("new.css").toExternalForm());
        innerStage.setScene(innerscene);
        innerStage.show();


    }
    @FXML
    public void load_info(ActionEvent event) throws SQLException, ClassNotFoundException {
        System.out.println("thsie is the load method");
        System.out.println("thise is the loader method");
        Connection com= sample.connectivity.connectionclass.getconnection();
        System.out.println("hey");
        //data= FXCollections.observableArrayList();
        System.out.println("hey1");
        Statement st = sample.connectivity.connectionclass.getconnection().createStatement();
        System.out.println("hey2");
        ResultSet rs=st.executeQuery("SELECT * FROM taken_items");
        System.out.println("hey3");
        while(rs.next()){
            System.out.println("hey4");
            data.add(new taken_item_user(rs.getString("item_name"),rs.getString("user_name"),rs.getDate("date"),rs.getString("item_id"),rs.getString("category"),rs.getString("brand")));
        }
        System.out.println("hey5");
        System.out.println("hey6");
        item_name.setCellValueFactory(new PropertyValueFactory<>("item_name"));
        System.out.println("hey7");
        item_id.setCellValueFactory(new PropertyValueFactory<>("item_id"));
        System.out.println("hey8");
        item_CATEGORY.setCellValueFactory(new PropertyValueFactory<>("category"));
        System.out.println("hey9");
        item_bbrand.setCellValueFactory(new PropertyValueFactory<>("brand"));
        System.out.println("hey10");
        taken_by.setCellValueFactory(new PropertyValueFactory<>("user_name"));
        System.out.println("hey12");
        date.setCellValueFactory(new PropertyValueFactory<>("date"));
        System.out.println("hey13");


        table.setItems(null);
        System.out.println("hey15");
        table.setItems(data);
        System.out.println("hey13");


    }

}
