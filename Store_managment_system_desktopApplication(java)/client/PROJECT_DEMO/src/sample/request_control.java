package sample;

import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Modality;
import javafx.stage.Stage;
import sample.connectivity.connectionclass;

import java.io.IOException;
import java.io.ObjectInputStream;
import java.io.ObjectOutputStream;
import java.net.Socket;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.Date;
import java.util.ResourceBundle;

public class request_control implements Initializable,collection_2 {
    @FXML
    private TextField searbarc;
    @FXML
    private TableView<requested_user> table;
    @FXML
    private TableColumn<requested_user,String> user_name;

    @FXML
    private TableColumn<requested_user,Integer>Request_id;
    @FXML
    private TableColumn<requested_user,Integer>item_id;
    @FXML
    private TableColumn<requested_user, Date> requested_date;
    @FXML
    private TableColumn<requested_user,String> aproved_by;
    @FXML
    private TableColumn<requested_user,String> approved;
    @FXML
    private TableColumn<requested_user, Date> approved_date;
    @FXML
    private ObservableList<requested_user> Data= FXCollections.observableArrayList();
    @FXML
    private sample.connectivity.connectionclass connectionclass;



    public void initialize(URL location, ResourceBundle resources) {

        connectionclass =new connectionclass();

    }

    @FXML
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
    public void approve() throws IOException {
        System.out.println("thise is teh approval");
        String u_name=table.getSelectionModel().getSelectedItem().getUser_name();
        System.out.println(u_name);
        String item_id= String.valueOf(table.getSelectionModel().getSelectedItem().getItem_id());
        System.out.println(item_id);
        String req_id= String.valueOf(table.getSelectionModel().getSelectedItem().getRequeste_id());
        System.out.println(req_id);
        Socket sock = null;
        sock = new Socket(SocketConnection.ip,  SocketConnection.port);
        //InputStreamReader input = null;
        //input = new InputStreamReader(sock.getInputStream());
        //BufferedReader ir = new BufferedReader(input);
//        String message = null;
//        message = ir.readLine();
        //System.out.println(message);
        ObjectOutputStream data = null;
        data = new ObjectOutputStream(sock.getOutputStream());
        ArrayList<String > list=new ArrayList<>();
        list.add("r2");
        //list.add(item_id);
        list.add(req_id);
        list.add(u_name);
        list.add(item_id);
        data.writeObject(list);
        data.flush();
        data.close();



    }
    @FXML
    public void load_information(ActionEvent event) throws SQLException, ClassNotFoundException, IOException {
//        table.getItems().clear();
//        ArrayList<ArrayList> message = new ArrayList<>();
//        ArrayList<String> fun=new ArrayList<>();
//            Socket sock = null;
//            sock = new Socket(SocketConnection.ip,  SocketConnection.port);
//            //InputStreamReader input = null;
//            //input = new InputStreamReader(sock.getInputStream());
//            //BufferedReader ir = new BufferedReader(input);
////        String message = null;
////        message = ir.readLine();
//            //System.out.println(message);
//            ObjectOutputStream data = null;
//            data = new ObjectOutputStream(sock.getOutputStream());
//            //ArrayList<String > list=new ArrayList<>();
//        fun.add("t1");
//        ObjectOutputStream dataa = null;
//        dataa = new ObjectOutputStream(sock.getOutputStream());
//        dataa.writeObject(fun);
        table.getItems().clear();
        ArrayList<ArrayList> message = new ArrayList<>();
        ArrayList<String> fun=new ArrayList<>();
        Socket sock = null;
        sock = new Socket(SocketConnection.ip, SocketConnection.port);
        //InputStreamReader input = null;
        //input = new InputStreamReader(sock.getInputStream());
        //BufferedReader ir = new BufferedReader(input);
//        String message = null;
//        message = ir.readLine();
        //System.out.println(message);
        fun.add("r1");
        ObjectOutputStream dataa = null;
        dataa = new ObjectOutputStream(sock.getOutputStream());
        dataa.writeObject(fun);
            ObjectInputStream input = new ObjectInputStream(sock.getInputStream());
            System.out.println("thise is the object input method");
            System.out.println(sock.getInputStream());
            Object object = input.readObject();
            System.out.println("the obeject have been read");
            System.out.println(object);
            message = (ArrayList<ArrayList>) object;
            ArrayList<String>listt=new ArrayList<>();
            for (int i = 0; i < message.size(); i++) {
                listt.clear();
                //listt.add(message.get(i);
                System.out.println(message.get(i));

                Integer a= Integer.valueOf(message.get(i).get(0).toString());
                String b=message.get(i).get(1).toString();
                Integer c= Integer.valueOf(message.get(i).get(2).toString());
                String d=message.get(i).get(3).toString();
                java.sql.Date date= java.sql.Date.valueOf(d);
                String e=message.get(i).get(3).toString();


                Data.add(new requested_user(a,b,c,date,e));//,rs.getString("added_by"),rs.getDate("date"),rs.getString("description")));


            }




        System.out.println("hey5");
        System.out.println("hey6");
        user_name.setCellValueFactory(new PropertyValueFactory<>("user_name"));
        System.out.println("hey7");




        item_id.setCellValueFactory(new PropertyValueFactory<>("item_id"));
        System.out.println("hey12");
        Request_id.setCellValueFactory(new PropertyValueFactory<>("Requeste_id"));
        System.out.println("hey12");
        requested_date.setCellValueFactory(new PropertyValueFactory<>("requested_date"));
        System.out.println("hey9");

        approved.setCellValueFactory(new PropertyValueFactory<>("Aprroved"));
        System.out.println("hey12");




        table.setItems(null);
        System.out.println("hey15");
        table.setItems(Data);
        System.out.println("hey13");


    }
    @FXML
    public void approve(ActionEvent event) throws IOException {
        System.out.println("thise is teh approval");
        String u_name=table.getSelectionModel().getSelectedItem().getUser_name();
        System.out.println(u_name);
        String item_id= String.valueOf(table.getSelectionModel().getSelectedItem().getItem_id());
        System.out.println(item_id);
        String req_id= String.valueOf(table.getSelectionModel().getSelectedItem().getRequeste_id());
        System.out.println(req_id);
        Socket sock = null;
        sock = new Socket(SocketConnection.ip,  SocketConnection.port);
        //InputStreamReader input = null;
        //input = new InputStreamReader(sock.getInputStream());
        //BufferedReader ir = new BufferedReader(input);
//        String message = null;
//        message = ir.readLine();
        //System.out.println(message);
        ObjectOutputStream data = null;
        data = new ObjectOutputStream(sock.getOutputStream());
        ArrayList<String > list=new ArrayList<>();
        list.add("r2");
        //list.add(item_id);
        list.add(req_id);
        list.add(u_name);
        list.add(item_id);
        data.writeObject(list);
        data.flush();
        data.close();



        }



    @FXML
    public void search(ActionEvent event){
//        table.getItems().clear();
//        System.out.println(request_items.isEmpty());
//        System.out.println("Starts");
//        String text = searbarc.getText();
//        int tlen = request_items.size();
//
//        Data.clear();
//        for (int i = 0; i < tlen; i++) {
//            if (request_items.get(i).getItemame().toLowerCase().contains(searbarc.getText().toLowerCase()) || request_items.get(i).getCategory().toLowerCase().contains(searbarc.getText().toLowerCase())|| request_items.get(i).getBrand().toLowerCase().contains(searbarc.getText().toLowerCase())){
//                data.add(request_items.get(i));
//            }
//        }
//        user_name.setCellValueFactory(new PropertyValueFactory<>("user_name"));
//        System.out.println("hey7");
//        categoy.setCellValueFactory(new PropertyValueFactory<>("category"));
//        System.out.println("hey8");
//        item_name.setCellValueFactory(new PropertyValueFactory<>("itemame"));
//        System.out.println("hey9");
//        brand.setCellValueFactory(new PropertyValueFactory<>("brand"));
//        System.out.println("hey10");
//        quantity.setCellValueFactory(new PropertyValueFactory<>("quantity"));
//        System.out.println("hey12");
//        requested_date.setCellValueFactory(new PropertyValueFactory<>("requested_date"));
//        System.out.println("hey9");
//        aproved_by.setCellValueFactory(new PropertyValueFactory<>("Approved_by"));
//        System.out.println("hey10");
//        approved.setCellValueFactory(new PropertyValueFactory<>("Approved"));
//        System.out.println("hey12");
//        approved_date.setCellValueFactory(new PropertyValueFactory<>("Approved_date"));
//        System.out.println("hey12");
//        table.setItems(data);


    }

}
